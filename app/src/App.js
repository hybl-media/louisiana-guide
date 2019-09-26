import React, { Component } from 'react';
import ReactDOM from "react-dom";
import { BrowserRouter as Router, Route, Link } from "react-router-dom";

import GuidesList from './GuidesList.js';

class App extends Component {
  render() {
    return (
      <GuidesList />
    )
  }
}

export default App