export interface Team {
    id: number,
    name: string,
    logo_uri: string,
    club_state: string,
    total_matches: number,
    coach: string,
    manager: string,
    captain: string,
    players: [{
        batting_style: string,
        bowling_style: string,
        country: string,
        created_at: string,
        first_name: string,
        fours: number,
        highest_scores: number,
        id: number,
        image_uri: string,
        jersey_number: number,
        last_name: string,
        role: string,
        sixes: number,
        team_id: number,
        total_fifties: number,
        total_hunderd: number,
        total_matches: number,
        total_runs: number
        updated_at: number
    }],
    team1_matches: [{
        created_at: string,
        id: number,
        name: string,
        status: string,
        team1_id: number,
        team2_id: number,
        toss_won_team_id: number,
        total_overs: number
        updated_at: string,
        venue: string
    }],
    team2_matches: [{
        created_at: string,
        id: number,
        name: string,
        status: string,
        team1_id: number,
        team2_id: number,
        toss_won_team_id: number,
        total_overs: number
        updated_at: string,
        venue: string
    }]
}