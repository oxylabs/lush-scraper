import fetch from 'node-fetch';

const username = 'YOUR_USERNAME';
const password = 'YOUR_PASSWORD';
const body = {
  'source': 'universal_ecommerce',
  'url': 'https://www.lush.com/us/en_us/c/hair-care?gad_source=1&gclid=cjwkcaiaungubhakeiwagid4am0kiglhmkfpbgcpf2dccwnx9sjfbaahgubt2cpwy2b8cq2hjv5eohochhgqavd_bwe',
};
const response = await fetch('https://realtime.oxylabs.io/v1/queries', {
  method: 'post',
  body: JSON.stringify(body),
  headers: {
    'Content-Type': 'application/json',
    'Authorization': 'Basic ' + Buffer.from(`${username}:${password}`).toString('base64'),
  }
});

console.log(await response.json());