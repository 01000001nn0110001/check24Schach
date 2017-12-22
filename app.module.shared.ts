import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';
import { RouterModule } from '@angular/router';


// import { NavMenuComponent } from './component/navmenu/navmenu.component';
// import { HomeComponent } from './component/home/home.component';
import { RegisterComponent } from './component/register/register.component';
import { AnmeldenComponent } from './component/anmelden/anmelden.component';
// import { finduserComponent } from './component/finduser/finduser.component';

import {TokenService} from './service/token.service';

@NgModule({
    declarations: [

        // HomeComponent,
        RegisterComponent,
        AnmeldenComponent,
        // finduserComponent,
    ],
    providers:[
        TokenService
    ],
    imports: [
        CommonModule,
        HttpModule,
        FormsModule,
        RouterModule.forRoot([
            { path: '', redirectTo: 'home', pathMatch: 'full' },
            // { path: 'home', component: HomeComponent },
            { path: 'register', component: RegisterComponent },
            { path: 'anmelden', component: AnmeldenComponent},
            // { path: 'finduser', component: finduserComponent},
            { path: '**', redirectTo: 'home' }

        ])
    ]
})
export class AppModuleShared {
}
