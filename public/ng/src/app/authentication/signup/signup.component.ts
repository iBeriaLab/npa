import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators, FormControl, NgForm } from '@angular/forms';
import {Observable} from 'rxjs/Rx';
import { AuthService } from "../../auth.services";

@Component({
  selector: 'app-signup',
  templateUrl: './signup.component.html',
  styleUrls: ['./signup.component.scss']
})
export class SignupComponent implements OnInit {


  constructor(private authService: AuthService) {}

  ngOnInit() {
  }

  onSignup(form: NgForm) {
    this.authService.signup(form.value.name, form.value.email, form.value.password)
      .subscribe(
        response => console.log(response),
        error    => console.log(error)
      );
  }

}
