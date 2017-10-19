import { Component, OnInit } from '@angular/core';
import { APIService } from '../api.service';
import { Http, Headers, RequestOptions } from '@angular/http';

@Component({
  selector: 'app-course-list',
  templateUrl: './course-list.component.html',
  styleUrls: ['./course-list.component.css']
})
export class CourseListComponent implements OnInit {
  constructor( private data: APIService, private http: Http) { }
  ngOnInit() {
  }
  GetCourse() : object[] {
      var course : object[] = [];
      for (var i = 0; i < this.data.CourseList.length; i++) {
        var courselist = this.data.CourseList[i];
        course.push(courselist);
      }
      return course;
    }


  
}
