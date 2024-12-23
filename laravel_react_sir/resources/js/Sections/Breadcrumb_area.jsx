import React from "react";

export default function Breadcrumb_area() {
    return (
        <>
            <div
                className="breadcrumb__area breadcrumb__overlay breadcrumb__height fix p-relative"
                data-background="assets/img/breadcurmb/breadcurmb-1-10.jpg"
            >
                <div className="breadcrumb-shap d-none d-xxl-block">
                    <img src="assets/img/breadcurmb/img-2.png" alt="img" />
                </div>
                <div className="container">
                    <div className="row">
                        <div className="col-xl-5 col-md-5">
                            <div className="breadcrumb__content z-index">
                                <div className="breadcrumb__section-title-box">
                                    <h3 className="breadcrumb__title">About</h3>
                                </div>
                                <div className="breadcrumb__list">
                                    <span>
                                        <a href="index.html">Home</a>
                                    </span>
                                    <span className="dvdr">
                                        <i>/</i>
                                    </span>
                                    <span>About</span>
                                </div>
                            </div>
                        </div>
                        <div className="col-xl-7 col-md-7">
                            <div className="breadcrumb-img z-index-3">
                                <div className="breadcrumb-img mt-140">
                                    <img
                                        src="assets/img/breadcurmb/img.png"
                                        alt="img"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
}
