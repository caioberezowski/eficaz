//
//  HeroStats.swift
//  dota
//
//  Created by Caio Berezowski on 12/12/20.
//

import Foundation


struct HeroStats:Decodable {
    let original_title: String
    let overview: String
    let poster_path: String
    let vote_average: Double
    let vote_count: Int
}


