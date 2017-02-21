import csv

# Read in raw data from csv
rawData = csv.reader(open('300k.csv', 'r'))

# the template. where data from the csv will be formatted to js
template = \
    ''' \
     [%s,%s],

    '''

# the head of the js file
output = \
    ''' \
var addressPoints2 = [
    '''

# loop through the csv by row skipping the first
iter = 0
for row in rawData:
    iter += 1
    if iter >= 2:
        latitude = row[1]
        longitude = row[2]
        output += template % ( row[1], row[2])

# the tail of the js file
output += \
    ''' \
    ]

    '''

# opens an js file to write the output to
outFileHandle = open("poke.js", "w")
outFileHandle.write(output)
outFileHandle.close()