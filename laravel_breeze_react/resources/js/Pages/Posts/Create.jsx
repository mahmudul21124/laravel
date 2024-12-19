import { useForm } from "@inertiajs/react";
import React from "react";

export default function Create() {
    const { data, setData, post, errors } = useForm({
        title: "",
        body: "",
    });

    console.log(data);

    function handleSubmit(e) {
        e.preventDefault();
        post(route("post.store"));
        //alert('Data sent')
    }
    return (
        <>
            <div>
                <h1>Post Entry</h1>
                <form name="pform" onSubmit={handleSubmit}>
                    <fieldset>
                        Title: <br />
                        <input
                            type="text"
                            name="title"
                            placeholder="Enter Title"
                            value={data.title}
                            onChange={(e) => setData("title", e.target.value)}
                        />
                        <br />
                        <span className="text-red-600">{errors.title}</span><br />
                        Body: <br />
                        <textarea
                            name="body"
                            id=""
                            placeholder="Enter Body"
                            onChange={(e) => setData("body", e.target.value)}
                        >
                            {data.body}
                        </textarea>
                        <br />
                        <span className="text-red-600">{errors.body}</span><br />
                        <button type="submit" name="submit">
                            SUBMIT
                        </button>
                    </fieldset>
                </form>
            </div>
        </>
    );
}
