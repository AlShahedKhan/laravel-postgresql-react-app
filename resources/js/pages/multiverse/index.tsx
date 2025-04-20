import React from 'react';
import { Link } from '@inertiajs/react';

const MultiverseIndex = ({ multiverses }) => {
  return (
    <div className="max-w-5xl mx-auto mt-8 p-6 bg-white rounded shadow">
      <h1 className="text-2xl font-bold mb-6">Multiverses</h1>

      <div className="mb-6">
        <Link href="/multiverse/create" className="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">
          Create New Multiverse
        </Link>
      </div>

      <div className="space-y-4">
        {multiverses.map((multiverse) => (
          <div key={multiverse.id} className="p-4 border rounded shadow-sm">
            <h2 className="font-semibold text-xl">{multiverse.name}</h2>
            <p className="text-gray-700">{multiverse.description}</p>
          </div>
        ))}
      </div>
    </div>
  );
};

export default MultiverseIndex;
