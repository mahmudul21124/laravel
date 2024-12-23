import About_area from "@/Sections/About_area";
import Breadcrumb_area from "@/Sections/Breadcrumb_area";
import Footer from "@/Sections/Footer";
import Header from "@/Sections/Header";
import Popup from "@/Sections/Popup";
import React from "react";

export default function About() {
    return (
        <>
            {/* back to top start */}
            
            {/* back to top end */}
            {/* search popup start */}
            <Popup />
            {/* search popup end */}
            {/* rr-offcanvus-area-start */}
            <div className="rroffcanvas-area">
                <div className="rroffcanvas">
                    <div className="rroffcanvas__close-btn">
                        <button className="close-btn">
                            <i className="fal fa-times" />
                        </button>
                    </div>
                    <div className="rroffcanvas__logo">
                        <a href="index.html">
                            <img
                                src="assets/img/logo/logo-white.png"
                                alt="img"
                            />
                        </a>
                    </div>
                    <div className="rr-main-menu-mobile d-xl-none" />
                    <div className="rroffcanvas__contact-info">
                        <div className="rroffcanvas__contact-title">
                            <h5>Contact us</h5>
                        </div>
                        <ul>
                            <li>
                                <i className="fa-light fa-location-dot" />
                                <a
                                    href="htrrs://www.google.com/maps/@23.8223586,90.3661283,15z"
                                    target="_blank"
                                >
                                    Melbone st, Australia, Ny 12099
                                </a>
                            </li>
                            <li>
                                <i className="fas fa-envelope" />
                                <a href="mailto:rubelmah55@gmail.com">
                                    rubelmah55@gmail.com
                                </a>
                            </li>
                            <li>
                                <i className="fal fa-phone-alt" />
                                <a href="tel:+48555223224">+48 555 223 224</a>
                            </li>
                        </ul>
                    </div>
                    <div className="rroffcanvas__social">
                        <div className="social-icon">
                            <a href="#">
                                <i className="fab fa-twitter" />
                            </a>
                            <a href="#">
                                <i className="fab fa-instagram" />
                            </a>
                            <a href="#">
                                <i className="fab fa-facebook-f" />
                            </a>
                            <a href="#">
                                <i className="fab fa-pinterest-p" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div className="body-overlay" />
            {/* rr-offcanvus-area-end */}

            {/* Header */}
            <Header />
            <main>
                {/* breadcrumb area start */}
                <Breadcrumb_area />
                {/* breadcrumb area end */}
                {/* About area end */}
                <About_area />
                {/* About area end */}
            </main>

            {/* Footer */}
            <Footer />
        </>
    );
}
