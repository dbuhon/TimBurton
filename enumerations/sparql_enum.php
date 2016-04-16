<?php
    abstract class SparqlEnum{
        const FORMAT = 'json';
        const PREFIX = "PREFIX : <http://dbpedia.org/resource/>
                        PREFIX dbpedia: <http://dbpedia.org/>
                        PREFIX dbo: <http://dbpedia.org/ontology/>
                        PREFIX foaf: <http://xmlns.com/foaf/0.1/>
                        PREFIX movie: <http://data.linkedmdb.org/resource/movie/>
                        PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>";

        const TIM_BURTON = "Tim_Burton";
        const SUBJECT_TIM_BURTON = ":Tim_Burton";
    }
?>