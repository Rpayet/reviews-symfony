import React, { useState } from 'react';

export default function Home({ companies }) {

    let [search, setSearch] = useState('');

    
    return (
    <div>

        <h2 className="text-blue-500 font-bold text-2xl">
            Hello React!
        </h2>
        
        <input value={search} onChange={e => setSearch(e.target.value)} />
        <ul>
            {companies.filter(company => company.toLowerCase().includes(search.toLowerCase())).map(company => <li>{company}</li>)}
        </ul>
    </div>
    )
}