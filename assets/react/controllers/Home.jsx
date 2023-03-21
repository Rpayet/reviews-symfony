import React from 'react';

export default function Home({ companies }) {
    return (
    <div>

        <h2 className="text-blue-500 font-bold text-2xl">
            Hello React!
        </h2>

        <ul>
            {companies.map(company => <li>{company}</li>)}
        </ul>
    </div>
    )
}