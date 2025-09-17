import './App.css';
import Greeting from './components/Greeting';
import GreetingClass from './components/GreetingClass';
import Welcome from './components/Welcome';
import Card from './components/Card';
import Counter from './components/Counter';
import ButtonClick from './components/ButtonClick';

function App() {
  return (
    <div className="App">
      <div className="components-container">
        <Greeting />
        <GreetingClass />
        <Welcome />
        <Card title="Judul 1" content="Ini adalah konten 1" />
        <Card title="Judul 2" content="Ini adalah konten 2" />
        <Counter />
        <ButtonClick />
      </div>
    </div>
  );
}

export default App;
