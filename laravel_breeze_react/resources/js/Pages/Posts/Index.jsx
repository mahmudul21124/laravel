import React from 'react'
import { usePage } from '@inertiajs/react'
import '../../../css/style.css'



export default function Index() {
    const { items, ptitle } = usePage().props
  return (
    <div>
        <h2>{ ptitle }</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores omnis aliquid dolorum quod excepturi quidem, quibusdam facere similique. Corrupti impedit nisi nobis rem dignissimos deserunt tempora ratione ducimus laborum delectus?</p> <br /><br />

        <table>
            <tr>
                <th >Id</th>
                <th>Title</th>
                <th>Body</th>
            </tr>
            {items.map(({id, title, body}) => (
            <tr>
                <td>{ id }</td>
                <td>{ title }</td>
                <td>{ body }</td>
            </tr>
            ))}
        </table>
    </div>
  )
}
