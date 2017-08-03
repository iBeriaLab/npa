import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators, FormControl, NgForm } from '@angular/forms';
import {Router} from '@angular/router';
import { AuthService } from "../../auth.services";

@Component({
  selector: 'app-signin',
  templateUrl: './signin.component.html',
  styleUrls: ['./signin.component.scss']
})
export class SigninComponent implements OnInit {


  constructor(private authService: AuthService, _router: Router) {}

  ngOnInit() {
  }

  onSignin(form: NgForm) {
    this.authService.signin(form.value.email, form.value.password)
      .subscribe(
        tokenData => console.log(tokenData),
        error => console.log(error)
      );
  }

}
