import { Component, Inject } from '@angular/core';
import { Http} from '@angular/http';
import {User} from './../../user';
import { Router ,ActivatedRoute } from '@angular/router';
import {TokenService} from './../../service/token.service'
import { tokenKey } from '@angular/core/src/view/util';

@Component({
    selector: 'anmelden',
    templateUrl: './anmelden.component.html',
    styleUrls: ['./anmelden.component.css']
})
export class AnmeldenComponent {
    public model: User;
        currentUser: string|null;
        http:Http;
        baseUrl: string;
        isLoading: boolean;
        isAngemeldet: boolean;
        isExisting: boolean;
        error: string;
        router: Router;
        route:ActivatedRoute;
        tokenService:TokenService;
        message:string|null =null;
        constructor(http: Http, route:ActivatedRoute, router:Router, @Inject('BASE_URL') baseUrl: string, tokenService:TokenService) {
            this.http = http;
            this.baseUrl = baseUrl;
            this.model= new User();
            this.isLoading= false;
            this.isAngemeldet=false;
            this.router = router;
            this.route = route;
            this.tokenService = tokenService;
            this.currentUser = this.tokenService.retrieve();
            if (this.currentUser!=null)
            {
                this.http.get(this.baseUrl+'api/User/GetById/'+this.currentUser).subscribe(result=>{
                    this.model = result.json();
                    console.log(this.model)
                });
    
            }
            // http.get(baseUrl + 'api/SampleData/WeatherForecasts').subscribe(result => {
            //     this.user = result.json() as User;
            // }, error => console.error(error));
        }
        ngOnInit()
        {
            this.route.queryParams.subscribe(params=>{
                this.message = params["message"];
            })


        }
        public abmelden(){
            this.tokenService.clear();
            this.currentUser=null;
            this.model = new User();
        }
        public anmelden (){
            console.log(this.baseUrl + 'api/User/Get');
            this.isLoading=true;
            this.http.get(this.baseUrl+'api/User/Get?value='+this.model.email).subscribe(result=>{
                this.model= result.json();
                this.tokenService.store(this.model.id);
                this.currentUser = this.model.id;
                this.isLoading= false;
                // this.router.navigate(['dashboard']);
            }, 
        (error)=>{
            this.error=error;
            console.log(error);
        });
        }
get diagnostic(){return JSON.stringify(this.model)}
    }
