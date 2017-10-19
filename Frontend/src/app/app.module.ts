import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms' ;  
import { RouterModule } from '@angular/router' ; 
import { HttpModule } from "@angular/http"; 

import { AppComponent } from './app.component';
import { CourseListComponent } from './course-list/course-list.component';

import {APIService} from './api.service';
import { AddcourseComponent } from './addcourse/addcourse.component';


@NgModule({
  declarations: [
    AppComponent,
    CourseListComponent,
    AddcourseComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpModule,
    RouterModule.forRoot([
      {path : '', component: AddcourseComponent},
      {path : 'courselist', component: CourseListComponent},
    ])

  ],
  exports: [RouterModule],
  providers: [APIService],
  bootstrap: [AppComponent]
})
export class AppModule { }
