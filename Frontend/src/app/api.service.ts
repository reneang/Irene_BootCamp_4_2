import { Injectable } from '@angular/core';
// import { Http, Headers, RequestOptions } from '@angular/http';
import { Observable } from 'rxjs/Rx';

@Injectable()
export class APIService {
  coursename: string
  coursecode: string 
  courseduration: string  
  CourseList: object[] = 
  [
    {'id':'1','coursename' : 'Math' , 'coursecode' : '209A' , 'courseduration' : '1 month'} , 
    {'id':'2','coursename' : 'PHP' , 'coursecode' : '210A','courseduration' : '10 day'}, 
    {'id':'3','coursename' : 'Angular' ,'coursecode' : '890A', 'courseduration' : '9 day'} 
  ];
  
  constructor() { }
  

}
