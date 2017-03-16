
def encrypt(text, key):
	cipher = ""
	for i in range(0, len(text)):
		x = ord(text[i])
		y = ord(key[i%len(key)])
		if y % 4 == 0:
			d = x + 3
		if y % 4 == 1:
			d = x + 4
		if y % 4 == 2:
			d = x + 5
		if y % 4 == 3:
			d = x + 6
		cipher += chr(d)
	return cipher

def decrypt(cipher, key):
	text = ""
	for i in range(0, len(cipher)):
		d = ord(cipher[i])
		y = ord(key[i%len(key)])
		if y % 4 == 0:
			x = d - 3
		if y % 4 == 1:
			x = d - 4
		if y % 4 == 2:
			x = d - 5
		if y % 4 == 3:
			x = d - 6
		text += chr(x)
	return text

secret = "John 1:1 - In the beginning was the Word, and the Word was with God, and the Word was God."
key = "platypus"

cipher = encrypt(secret, key)
text = decrypt(cipher, key)

print decrypt("Mrlq$4>7#0$Lr#xnh#fhklrtlqk#{dw&wki#[rvj/#eqh#xnh#[rvg$}dv$zmwl&Jrh/$drj#wlh$Zsxg#{dw#Kug1", key)

for word in open("files/dictionary.txt"):
	text = decrypt(cipher, word[:-1])
	if word == "platypus":
		print word, text
	if text.find(" the ") > 0 and text.find(" and ") > 0:
		print word, text
