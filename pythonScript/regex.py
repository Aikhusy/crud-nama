
import re

def regex(inputs):

    pattern = re.compile(r'(\w+)\s+(\d+)\s+(\w+)')

    match = pattern.match(inputs)

    if match:
        nama = match.group(1)
        usia = match.group(2)
        kota = match.group(3)

    return {"nama":nama,
            "usia":usia,
            "kota":kota
    }