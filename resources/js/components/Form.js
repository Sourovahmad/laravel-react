
import React from 'react'

export default function Form() {
    return (
        <div>

        <form method="POST">
            <div className="form-group">
                <label htmlFor="name" >Name</label>
                    <input type="text" name="name" id="input_name" placeholder="Enter name" className="form-control" />
                <button type="submit" className="btn btn-success"> Submit</button>
            </div>
        </form>


        </div>
    )
}
