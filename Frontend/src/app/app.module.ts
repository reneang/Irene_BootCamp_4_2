import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms' ;  
import { RouterModule } from '@angular/router' ; 
import { HttpModule } from "@angular/http"; 

import { AppComponent } from './app.component';
import { CourseListComponent } from './course-list/course-list.component';

import {APIService} from './api.service';


@NgModule({
  declarations: [
    AppComponent,
    CourseListComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpModule,
    RouterModule.forRoot([
      {path : 'course', component: CourseListComponent},
    ])

  ],
  exports: [RouterModule],
  providers: [APIService],
  bootstrap: [AppComponent]
})
export class AppModule { }
