import React, { Component } from "react";
import axios from "axios";
import { BrowserRouter as Router, Route, Link } from "react-router-dom";

class Guide extends Component {
    constructor(props) {
        super(props);
        this.state = {
          guide: []
        };
    }

    componentDidMount(){
        const slug = this.props.match.params.id
        var guideId;
        var validSlug = false;

        axios.get("http://localhost/wp-json/wp/v2/categories").then(categories => { // Hent kategorier og sammenlign find id der matcher slug
            categories.data.map((category, i) => {
                if(category.slug == slug){
                    guideId = category.id;
                    validSlug = true;
                }
            });
            if(validSlug != true){ // Tjek om slug er korrekt, ellers gå til 404
                console.log("slug invalid");
            }else{
                axios.get("http://localhost/wp-json/wp/v2/spots?categories=" + guideId).then(spots => { // Brug guideId til at hente spots der tilhører guiden
                    this.setState({
                        guide: spots.data
                    });
                });
            }          
        });
    }

    render() {
        return(
          <div>
            {this.state.guide.map(spot => (
                <div key={spot.id}>
                    <h3>{spot.title.rendered}</h3>
                </div>
            ))}
          </div>
        )
    }
}

export default Guide