import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpClientModule } from '@angular/common/http';
import { NgxPaginationModule } from 'ngx-pagination';
import { RouterModule, Routes } from '@angular/router';

import { DataService } from './services/data.service';

import { AppComponent } from './app.component';
import { HeaderComponent } from './components/layout/header/header.component';
import { CardComponent } from './components/card/card.component';
import { ListComponent } from './components/list/list.component';
import { DetailsComponent } from './components/details/details.component';

const appRoutes: Routes = [
  { path: '', component: CardComponent },
  { path: 'details/:id', component: DetailsComponent }
];
@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    CardComponent,
    ListComponent,
    DetailsComponent
  ],
  imports: [
    BrowserModule,
    HttpClientModule,
    NgxPaginationModule,
    RouterModule.forRoot(appRoutes)
  ],
  providers: [DataService],
  bootstrap: [AppComponent]
})
export class AppModule { }
