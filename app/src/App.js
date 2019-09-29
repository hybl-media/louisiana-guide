import React, { Component } from 'react';
import ReactDOM from "react-dom";
import { BrowserRouter as Router, Route, Link, Switch } from "react-router-dom";

import Spot from './Spot.js';
import Guide from './Guide.js';
import GuideList from './GuideList.js';

class App extends Component {
  render() {
    return (
      <Switch>
        <Route exact path="/" render={props => <GuideList {...props} /> } />
        <Route path="/spot/:id" render={props => <Spot {...props} /> } />
        <Route path="/guide/:id" render={props => <Guide {...props} /> } />
      </Switch>
    )
  }
}

export default App