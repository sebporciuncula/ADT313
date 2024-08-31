
import './App.css';

import Name from './component/Name/Name';
import Section from './component/Section/Section';
import Description from './component/Description/Description';


function App(){
  const userInformation = {
firstName: 'Sebastian Sonny ',
lastName: 'Porciuncula',
Section: "BSIT-3A",
Description:"Eyyable sana this semester"

  }

  return (
    <div className="App"> 
    <Name firstName={userInformation.firstName}lastName={userInformation.lastName}/>
    <Section Section={userInformation.Section}/>
    <Description Description={userInformation.Description}/>

    
    </div>
  );
}

export default App;
