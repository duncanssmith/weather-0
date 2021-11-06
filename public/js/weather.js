'use strict';

const e = React.createElement;

class WeatherButton extends React.Component {
  constructor(props) {
    super(props);
    this.state = { 
      error: null,
      requested: false 
    };
  }

  render() {
    if (this.state.requested) {
      console.log(this.state);
      return 'Fetching weather...';
    }

    return e(
      'button',
      { onClick: () => this.setState({ requested: true }) },
      'Get weather data for your location'
    );
  }
}

const domContainer = document.querySelector('#weather_container');
ReactDOM.render(e(WeatherButton), domContainer);