import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Clock extends Component {
    constructor(props){
        super(props);
        this.state = {date: new Date()};
    }

    render() {
        return (
            <div className="container">
                <p>The time is {this.state.date.toLocaleTimeString()}</p>
            </div>
        );
    }

    componentDidMount() {

        this.timerID = setInterval(
            () => this.tick(), 
            1000);
    }

    componentWillUnmount() {
        clearInterval(this.timerID);
    }

    tick(){
        this.setState({
            date: new Date()
        });
    }
}

