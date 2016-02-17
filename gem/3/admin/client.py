import socket

host=socket.gethostname()
port=1234
sock=socket.socket(socket.AF_INET,socket.SOCK_STREAM)
sock.connect((host,port))
inp=raw_input("enter file")
sock.sendall(inp)
data=sock.recv(1024)
print data
