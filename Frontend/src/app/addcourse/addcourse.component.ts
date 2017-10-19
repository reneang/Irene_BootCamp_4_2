import { Component, OnInit } from '@angular/core';
import { APIService } from '../api.service';
import { Http, Headers, RequestOptions } from '@angular/http';


@Component({
  selector: 'app-addcourse',
  templateUrl: './addcourse.component.html',
  styleUrls: ['./addcourse.component.css']
})
export class AddcourseComponent implements OnInit {

  constructor(private data: APIService, private http: Http) { }

  ngOnInit() {
  }
  AddCourse() :void {
    if (this.data.CourseList.length != 0 && this.data.coursename!= null) {
      var lastId = this.data.CourseList[this.data.CourseList.length - 1]['id'];
      var obj = {
      'id' : (lastId+1), 
      'coursename' : this.data.coursename,
      'coursecode' : this.data.coursecode,      
      'courseduration' : this.data.courseduration
   };    
   this.data.CourseList.push(obj);
   console.log(this.data.CourseList);
}
}
}
