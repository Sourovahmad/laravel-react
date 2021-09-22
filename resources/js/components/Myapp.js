import React from 'react';
import ReactDOM from 'react-dom';
import Myform from './Form';



function Myapp() {
    return (

            <div className="container mt-4">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">Basic Things for React</div>

                            <div className="card-body">

                            <Myform />

                                </div>
                        </div>
                    </div>
                </div>
            </div>

    );
}

export default Myapp;

if (document.getElementById('app')) {
    ReactDOM.render(<Myapp />, document.getElementById('app'));
}

