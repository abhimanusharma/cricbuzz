import { Component, OnInit } from '@angular/core';

import { DataService } from '../../services/data.service';
import { Team } from '../../interfaces/team';

@Component({
  selector: 'app-card',
  templateUrl: './card.component.html',
  styleUrls: ['./card.component.css']
})
export class CardComponent implements OnInit {
  teams: Team[];
  errorMessage: string;
  page: number = 1;
  matches: any[];

  constructor(public dataService: DataService) {
    this.dataService.getTeams().subscribe(teams => {
      this.teams = teams;
    }, error => this.errorMessage = error);
  }

  ngOnInit(): void {
  }

}
