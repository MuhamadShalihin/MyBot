print("Python is really a great language,", "isn't it?")

str = input("Enter your input: ")
print("Received input : "), str

# Open a file
with open("foo.txt", "wb") as fo:
    print("Name of the file: "), fo.name
    print("Closed or not : "), fo.closed
    print("Opening mode : "), fo.mode
    print("Softspace flag : "), fo.softspace

fo.write( "Python is a great language.\nYeah its great!!\n")

# Close opened file
fo.close()