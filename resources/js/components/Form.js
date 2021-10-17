import React, { Component } from 'react';

class Form extends Component {

    constructor(props){
        super(props);


        this.state = {
            name: "hello",
            dir: [],
            item:{

                value: 0
            },
            isEditing: false,
            temp_id: null
        }
    }

     update () {
         this.setState({ name: "hi"  })
    }

    render() {
        return (
            <div>
                <div className="container">
                    {this.state.item.name}
                </div>
                <form method="POST">
                    <div className="form-group">
                        <label htmlFor="name" >Name</label>
                        <input type="text" name="name" id="input_name" placeholder="Enter name" className="form-control" />
                        <button type="button" className="btn btn-success" onClick={()=>{this.update()}}> Submit</button>
                    </div>
                </form>
            </div>
        );
    }
}

export default Form;