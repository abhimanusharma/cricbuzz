import { Component, OnInit } from '@angular/core';
import { DataService } from '../../services/data.service';
import { Match } from '../../interfaces/match';

@Component({
  selector: 'app-list',
  templateUrl: './list.component.html',
  styleUrls: ['./list.component.css']
})
export class ListComponent implements OnInit {
  matches: Match[];
  errorMessage: string;
  page: number = 1;
  id: number;

  constructor(public dataService: DataService) {
    this.dataService.getMatches().subscribe(matches => {
      this.matches = matches;
    }, error => this.errorMessage = error);

  }

  ngOnInit(): void {
  }

}
