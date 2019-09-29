import React, { Component } from "react";
import axios from "axios";
import { BrowserRouter as Router, Route, Link } from "react-router-dom";

class GuideList extends Component {
    constructor(props){
        super(props);
        this.state = {
            guides: []
        }
    }

    componentDidMount(){
        axios.get("http://localhost/wp-json/wp/v2/guides").then(guides => { // Hent alle guides
            this.setState({
                guides: guides.data
            })
        })
    }

    render(){
        return(
            <div>
                <ul>
                    {this.state.guides.map(guide => ( // For hver guide lav et link
                        <li key={guide.id}>
                            <Link to={"/guide/" + guide.slug}>{guide.title.rendered}</Link>
                        </li>
                    ))}
                </ul>
            </div>
        )
    }
}

export default GuideList