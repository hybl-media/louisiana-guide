import React, { Component } from 'react';
import ReactDOM from "react-dom";
import { BrowserRouter as Router, Route, Link, Switch } from "react-router-dom";

import Spot from './Spot.js';
import Guide from './Guide.js';


class App extends Component {
  render() {
    return (
      <Switch>
        <Route path="/spot/:id" render={props => <Spot {...props} /> } />
        <Route path="/guides/:id" render={props => <Guide {...props} /> } />
      </Switch>
    )
  }
}

export default App