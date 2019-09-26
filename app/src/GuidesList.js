import React, { Component } from "react";
import axios from "axios";
import { BrowserRouter as Router, Route, Link } from "react-router-dom";

import SpotsList from './SpotsList.js';


class GuidesList extends Component {
    constructor(props) {
      super(props);
      this.state = {
        guides: []
      };
      this.createMarkup = this.createMarkup.bind();
    }
  
    componentDidMount() {
      axios.get("http://localhost/wp-json/wp/v2/guides").then(guide => {
        this.setState({
          guides: guide.data
        });
      });
    }
  
    createMarkup(html) {
      return { __html: html };
    }
  
    render() {
      return (
        <Router>
          <div>
            {this.state.guides.map(guide => (
              <Link to={`/${guide.slug}`} key={guide.id} guide={guide.category}>
                <div className="card" key={guide.id}>
                  <div className="card-content">
                    <h3>{guide.title.rendered}</h3>
                  </div>
                </div>
              </Link>
            ))}
          </div>
          <Route path="/" exact component={SpotsList} />

        </Router>
      );
    }
  }
  
  export default GuidesList;