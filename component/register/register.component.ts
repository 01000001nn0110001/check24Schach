import { Component, Inject } from '@angular/core';
import { Http} from '@angular/http';
import {User} from './../../user';
@Component({
    selector: 'register',
    templateUrl: './register.component.html',
    styleUrls: ['./register.component.css']
})
export class RegisterComponent {
    public model: User;
        http:Http;
        baseUrl: string;
        isLoading: boolean;
        hasResults: boolean;
        error: string;
        constructor(http: Http, @Inject('BASE_URL') baseUrl: string) {
            this.http = http;
            this.baseUrl = baseUrl;
            this.model= new User();
            this.isLoading= false;
            this.hasResults=false;

        }
        public register (){
            console.log(this.baseUrl + 'api/User/Create');
            this.isLoading=true;
            this.http.post(this.baseUrl+'api/User/Create',this.model).subscribe(result=>{
                this.hasResults=true;
                this.model= result.json();
                this.isLoading= false;
            },
        (error)=>{
            this.error=error;
            console.log(error);
        });
        }
get diagnostic(){return JSON.stringify(this.model)}

        public reset(){
            this.model= new User();
            this.isLoading= false;
            this.hasResults=false;
            this.error="";
        }
    }
