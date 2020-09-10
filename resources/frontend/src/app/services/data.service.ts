import { Injectable } from '@angular/core';
import { HttpClient, HttpErrorResponse } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';
import { catchError } from 'rxjs/operators';

@Injectable({
  providedIn: 'root'
})
export class DataService {
  constructor(public http: HttpClient) {

  }

  getTeams(): Observable<any> {
    return this.http.get('http://local.laravel.cb/api/teams')
      .pipe(
        catchError(this.handleError)
      );
  }

  getTeamDetail(id: number): Observable<any> {
    return this.http.get('http://local.laravel.cb/api/teams/' + id)
      .pipe(
        catchError(this.handleError)
      );
  }

  getMatches(): Observable<any> {
    return this.http.get('http://local.laravel.cb/api/matches')
      .pipe(
        catchError(this.handleError)
      );
  }

  handleError(error: HttpErrorResponse) {
    return throwError(error.message);
  }


}
