import React from 'react';
import ReactDOM from 'react-dom';
import Dixam from './Example';


function Myapp() {
    return (
        <div className="container">
           <div className="text-center">
                <Dixam/>
           </div>
        </div>
    );
}

export default Myapp;

if (document.getElementById('app')) {
    ReactDOM.render(<Myapp />, document.getElementById('app'));
}

