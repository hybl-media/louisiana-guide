import React, { Component } from 'react'
import axios from "axios";

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
        <div>
          {this.state.guides.map(guide => (
              <div className="card" key={guide.id}>
                <div className="card-content">
                  <a href="#">{guide.title.rendered}</a>
                </div>
              </div>
          ))}
        </div>
      );
    }
  }
  
  export default GuidesList;