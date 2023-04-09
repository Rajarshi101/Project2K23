import threading

class LoginQueue:
    def _init_(self, max_users):
        self.max_users = max_users (1)
        self.semaphore = threading.Semaphore(max_users)

    def login(self, user):
        self.semaphore.acquire()
        print(f"{user} successfully logged in.")
        
    def logout(self, user):
        print(f"{user} successfully logged out.")
        self.semaphore.release()
