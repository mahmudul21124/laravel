import Footer from "@/Sections/Footer";
import Header from "@/Sections/Header";
import React from "react";

export default function Contact() {
    return (
        <>
            <Header />

            {/* breadcrumb area start */}
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
                                    <h3 className="breadcrumb__title">
                                        Contact
                                    </h3>
                                </div>
                                <div className="breadcrumb__list">
                                    <span>
                                        <a href="index.html">Home</a>
                                    </span>
                                    <span className="dvdr">
                                        <i>/</i>
                                    </span>
                                    <span>Contact</span>
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
            {/* breadcrumb area end */}
            {/* contact area start */}
            <section className="rr-contact-area p-relative black-bg fix">
                <div className="rr-contact-shap">
                    <img src="assets/img/contact/shap01.png" alt="img" />
                </div>
                <div className="rr-contact-img">
                    <img src="assets/img/contact/contact-img.jpg" alt="img" />
                </div>
                <div className="container">
                    <div className="row">
                        <div className="col-xl-6 col-lg-3 col-md-1" />
                        <div className="col-xl-4 col-lg-9 col-md-10">
                            <div className="rr-form-box text-center">
                                <b>OUR Booking Now</b>
                                <h4 className="rr-section-title pb-60">
                                    Appoinment
                                </h4>
                                <form>
                                    <div className="row">
                                        <div className="col-xl-6 col-lg-6 col-md-6 mb-20">
                                            <div className="rr-form-input-box rr-form-input-main">
                                                <input
                                                    type="text"
                                                    placeholder="Name"
                                                />
                                            </div>
                                        </div>
                                        <div className="col-xl-6 col-lg-6 col-md-6 mb-20">
                                            <div className="rr-form-input-box rr-form-input-main">
                                                <input
                                                    type="email"
                                                    placeholder="Email"
                                                />
                                            </div>
                                        </div>
                                        <div className="col-xl-12 col-lg-12 col-md-12 mb-20">
                                            <div className="rr-form-input-box rr-form-input-main">
                                                <input
                                                    type="text"
                                                    placeholder="Address"
                                                />
                                            </div>
                                        </div>
                                        <div className=" col-md-12 col-12">
                                            <div className="rr-form-input-box pb-30">
                                                <select
                                                    style={{ display: "none" }}
                                                >
                                                    <option>
                                                        Choose Service
                                                    </option>
                                                    <option>
                                                        Medicine &amp; Health
                                                    </option>
                                                    <option>
                                                        Economical Choice
                                                    </option>
                                                    <option>
                                                        Team Of Support
                                                    </option>
                                                    <option>
                                                        Test Laboratory
                                                    </option>
                                                </select>
                                                <div
                                                    className="nice-select"
                                                    tabIndex={0}
                                                >
                                                    <span className="current">
                                                        Choose Service
                                                    </span>
                                                    <ul className="list">
                                                        <li
                                                            data-value="Your Inquiry about"
                                                            className="option selected focus"
                                                        >
                                                            Choose Service
                                                        </li>
                                                        <li
                                                            data-value="01 Year"
                                                            className="option"
                                                        >
                                                            Medicine &amp;
                                                            Health
                                                        </li>
                                                        <li
                                                            data-value="02 Year"
                                                            className="option"
                                                        >
                                                            Economical Choice
                                                        </li>
                                                        <li
                                                            data-value="03 Year"
                                                            className="option"
                                                        >
                                                            Team Of Support
                                                        </li>
                                                        <li
                                                            data-value="04 Year"
                                                            className="option"
                                                        >
                                                            Test Laboratory
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="col-12 mb-20">
                                            <div className="rr-form-textarea-box">
                                                <textarea
                                                    placeholder="Your meassage"
                                                    defaultValue={""}
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <button
                                    className="rr-btn-1 rr-form-theme-bg"
                                    type="submit"
                                >
                                    <span>Make an appoinment</span>
                                </button>
                            </div>
                        </div>
                        <div className="col-xl-2 col-lg-10 col-md-1" />
                    </div>
                </div>
            </section>
            {/* contact area end */}

            <Footer />
        </>
    );
}
