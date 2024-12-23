import React from "react";
import Popup from "@/Sections/Popup";
import Header from "@/Sections/Header";
import Slider_area from "@/Sections/Slider_area";
import Contact_area from "@/Sections/Contact_area";
import Features_area from "@/Sections/Features_area";
import About_area from "@/Sections/About_area";
import Service_area from "@/Sections/Service_area";
import Choose_area from "@/Sections/Choose_area";
import Video_area from "@/Sections/Video_area";
import Team_area from "@/Sections/Team_area";
import Counter_area from "@/Sections/Counter_area";
import Tab_area from "@/Sections/Tab_area";
import Brand_area from "@/Sections/Brand_area";
import Blog_area from "@/Sections/Blog_area";
import Cta_area from "@/Sections/Cta_area";
import Footer from "@/Sections/Footer";
import Back_to_the_top from "@/Sections/Back_to_the_top";
import { usePage } from "@inertiajs/react";

export default function Home() {
    const { doctors, specialists } = usePage().props;
    const SpName = (sid) => 
        {const sp = specialists.find(sp => sp.id===sid);
            return sp ? sp.name : 'Unknown';
        };

    console.log(doctors);

    return (
        <>
            {/* <!-- back to top start --> */}
            <Back_to_the_top />
            {/*<!-- back to top end -->*/}

            {/*<!-- search popup start -->*/}
            <Popup />
            {/*<!-- search popup end -->*/}

            {/* Header */}
            <Header />

            <main>
                {/*<!-- slider area start -->*/}
                <Slider_area />
                {/*<!-- slider area end -->*/}

                {/*<!-- contact area start -->*/}
                <Contact_area />
                {/*<!-- contact area end -->*/}

                {/*<!-- features area start -->*/}
                <Features_area />
                {/*<!-- features area end -->*/}

                {/* About area end */}
                <About_area />
                {/* About area end */}

                {/* service area start */}
                <Service_area />
                {/* service area end */}

                {/* choose  area strat */}
                <Choose_area />
                {/* choose  area mobail end */}

                {/* video area start */}
                <Video_area />
                {/* video area end */}

                {/* team area start */}
                <section className="rr-team-4-area pt-100 pb-80 fix">
                    <div className="container">
                        <div className="row mb-40">
                            <div
                                className="col-xl-12 wow rrfadeUp"
                                data-wow-duration=".9s"
                                data-wow-delay=".3s"
                            >
                                <div className="rr-price-2-title-box text-center mb-45">
                                    <span className="rr-section-subtitle p-relative">
                                        <img
                                            src="assets/img/testimonial/section-icon.png"
                                            alt="img"
                                        />{" "}
                                        Our Team Member{" "}
                                        <img
                                            src="assets/img/testimonial/section-icon.png"
                                            alt="img"
                                        />
                                    </span>
                                    <h4 className="rr-section-title rr-section-title-space">
                                        Meet Better The Team Doctor{" "}
                                    </h4>
                                </div>
                            </div>
                            {/* Loop Start */}
                            {doctors.map(({ id, name, specialist_id, email, photo, status }) => (
                                <div
                                    className="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 wow rrfadeUp"
                                    data-wow-duration=".9s"
                                    data-wow-delay=".3s"
                                >
                                    <div className="rr-team-4-item p-relative mb-60">
                                        <div className="rr-team-4-thumb p-relative ">
                                            <div className="rr-team-4-img">
                                                <img
                                                    className="w-100"
                                                    src={photo}
                                                    alt="img"
                                                />
                                            </div>
                                            <div className="rr-team-4-icon">
                                                <a href="team.html">
                                                    <img
                                                        src={photo}
                                                        alt="img"
                                                    />
                                                </a>
                                            </div>
                                            <div className="rr-team-4-social">
                                                <span className="icon" />
                                                <a
                                                    className=" mt-20 rr-el-team-social"
                                                    href="#"
                                                >
                                                    <i className="fab fa-facebook-f" />
                                                </a>
                                                <a
                                                    className="rr-el-team-social"
                                                    href="#"
                                                >
                                                    <i className="fab fa-twitter" />
                                                </a>
                                                <a
                                                    className="rr-el-team-social"
                                                    href="#"
                                                >
                                                    <i className="fab fa-instagram" />
                                                </a>
                                            </div>
                                        </div>

                                        <div className="rr-team-4-content text-center p-relative">
                                            <h3 className="rr-team-4-title">
                                                <a href="team.html">
                                                    {name}
                                                </a>
                                            </h3>
                                            <span>{SpName(specialist_id)}</span>
                                        </div>
                                        <div className="rr-team-4-arrow">
                                            {" "}
                                            <a href="team.html">
                                                <i className="fa-solid fa-arrow-up" />
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                                ))}
                            
                            
                        </div>
                        <div className="row">
                            <div
                                className="team-btn text-center wow rrfadeUp"
                                data-wow-duration=".9s"
                                data-wow-delay=".9s"
                            >
                                <a className="rr-btn-black" href="team.html">
                                    <span>
                                        View all Team{" "}
                                        <i className="fa-sharp fa-solid fa-plus" />
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                {/* team area end */}

                {/* COUNTER  area start */}
                <Counter_area />
                {/* COUNTER  area end */}

                {/* tab area start */}
                <Tab_area />
                {/* tab area end */}

                {/* brand area start */}
                <Brand_area />
                {/* brand area end */}

                {/* blog area start */}
                <Blog_area />
                {/* blog area end */}

                {/* cta area start */}
                <Cta_area />
                {/* cta area end */}
            </main>

            {/* Footer */}
            <Footer />
        </>
    );
}
