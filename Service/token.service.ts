import {Injectable} from '@angular/core'

@Injectable()
export class TokenService{

    private tokenKey: string = 'UserToken';
    public store(content:string):void{
        localStorage.setItem(this.tokenKey,content);
    }
    public retrieve():string|null{
        var storedToken: string|null;
        storedToken = localStorage.getItem(this.tokenKey);
        if(!storedToken) return null;
        return storedToken;

    }

    public clear():void{
        localStorage.removeItem(this.tokenKey);
    }
}