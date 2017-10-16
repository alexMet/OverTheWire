$encodedSecret = "3d3d516343746d4d6d6c315669563362";

function encodeSecret($secret) {
    return base64_decode(strrev(hex2bin($secret)));
}

echo encodeSecret($encodedSecret);
