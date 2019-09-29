import React, { Component } from "react";
import axios from "axios";
import { BrowserRouter as Router, Route, Link } from "react-router-dom";

class Spot extends Component {
  constructor(props) {
    super(props);
    this.state = {
      spot: []
    };
  }
  componentDidMount() {
    const slug = this.props.match.params.id
    axios.get("http://localhost/wp-json/wp/v2/spots?slug=" + slug).then(spot => {
      this.setState({
        spot: spot.data
      });
    });
  }
  render() {
    return(
      <div>
        {this.state.spot.map(spot => (
          <div key={spot.id}>
            <h3>{spot.title.rendered}</h3>
          </div>
        ))}
      </div>
    )
  }
}

export default Spot