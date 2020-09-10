import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Params } from '@angular/router';
import { DataService } from '../../services/data.service';
import { Team } from '../../interfaces/team';

@Component({
  selector: 'app-details',
  templateUrl: './details.component.html',
  styleUrls: ['./details.component.css']
})
export class DetailsComponent implements OnInit {
  id: number;
  team: Team;
  matches: any[];
  players: any[];
  errorMessage: string;

  constructor(
    private route: ActivatedRoute,
    private dataService: DataService
  ) {
    this.route.params.subscribe((params: Params) => {
      this.id = params.id;
      this.dataService.getTeamDetail(this.id).subscribe(team => {
        this.team = team;
        this.matches = this.team.team1_matches.concat(this.team.team2_matches);
        this.players = this.team.players;
      }, error => this.errorMessage = error);
    }
    );
  }

  ngOnInit(): void {
  }

}
