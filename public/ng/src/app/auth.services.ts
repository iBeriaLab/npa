import { Injectable } from "@angular/core";
import { Http, Headers, Response } from "@angular/http";
import { Observable } from "rxjs";

import 'rxjs/Rx';

@Injectable()

export class AuthService {
    constructor(private http:Http){

    }
    signup(name: string, email: string, password: string){
        return this.http.post('http://gaagrdzele.com/api/app/user',
        {name: name, email: email, password: password},
        {headers: new Headers({'X-Requested-With' : 'XMLHttpRequest'})});
    }

    signin(email: string, password: string){
        return this.http.post('http://gaagrdzele.com/api/signin',
        {email: email, password: password},
        {headers: new Headers({'X-Requested-With' : 'XMLHttpRequest', 'Content-Type' : 'application/json'})})
        .map(
            (response: Response) => {
                const token = response.json().token;
                const base64Url = token.split('.')[1];
                const base64 = base64Url.replace('-', '+').replace('_', '/');
                return {token: token, decoded: JSON.parse(window.atob(base64))};
            }
        )
        .do(
            tokenData => {
                localStorage.setItem('token', tokenData.token);
            }
        );
    }

    getToken(){
        return localStorage.getItem('token');
    }
}