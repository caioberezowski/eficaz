//
//  TopSerie.swift
//  topseries
//
//  Created by Caio Berezowski on 12/12/20.
//

import Foundation

struct TopSerie: Decodable{
    let original_title: String
    let overview: String
    let poster_path: String
    let vote_average: Double
    let vote_count: Int
  //  let genres: [Genero]
}
