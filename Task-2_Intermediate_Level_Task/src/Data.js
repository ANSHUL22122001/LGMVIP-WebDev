import React, { Component } from 'react'

class Data extends Component {

    render() {
        const usrData = this.props.usrData.map((user) => {
            return(
                <div className="box col-lg-4" key={user.id} style={{'marginTop':'25px'}}>
                    <div className="card" style={{'background': 'black'}}>
                        <div className="imgBx">
                            <img src={user.avatar} alt="images" />
                        </div>
                        <div className="details">
                            <h2>{user.first_name+" "+user.last_name}<br/><span>{user.email}</span></h2>
                        </div>
                    </div>
                </div> 
            );
        });
        return (
            <div className="container">
                <div className="row" style={{'marginTop':'20px'}}>
                    {usrData}
                </div>
            </div>
        );
    }
}

export default Data