import requests
from pprint import pprint

# Structure payload.
payload = {
    'source': 'universal_ecommerce',
    'url': 'https://www.lush.com/us/en_us/c/hair-care?gad_source=1&gclid=cjwkcaiaungubhakeiwagid4am0kiglhmkfpbgcpf2dccwnx9sjfbaahgubt2cpwy2b8cq2hjv5eohochhgqavd_bwe'
}

# Get response.
response = requests.request(
    'POST',
    'https://realtime.oxylabs.io/v1/queries',
    auth=('user', 'pass1'),
    json=payload,
)

# Instead of response with job status and results url, this will return the
# JSON response with the result.
pprint(response.json())